<?php
include 'functions.php';
include './views/partials/head.php';
print_r($users[0]);
 ?>
 <h1>JavaScript Calculator</h1>
 <p class="warning">Don't divide by zero</p>
 <style>
 button.col-3.btn.btn-circle{
   height: 110px;
   font-size: 3rem;
   width: 110px;
 }
 </style>
 <div class="col-lg-4 col-xlg-3 col-md-5">
  <div class="card blog-widget">
   <div class="card-body">
    <div class="blog-image">
      <div class="container calculator-viewer" >
        <div class="row" style="position: absolute;">
          <div id="history" class="history col-9">5-6=-1</div>
          <span id="op-viewer" class="col-3">-</span>
        </div>
       <div id="viewer" class="viewer">0</div>
      </div>
      <img src="./public/img/backgrounds/login.jpg" alt="img" class="img-responsive">
    </div>
    <div id="calculator" class="calculator container">
      <div class="row">
       <button id="clear-everything" class="col-3 clear-everything btn btn-circle btn-outline-secondary">CE</button>
       <button id="clear" class="col-3 clear btn btn-circle btn-outline-secondary">C</button>
       <button class="col-3 undo btn btn-circle btn-outline-secondary" id="undo"><i class="mdi mdi-backspace"></i></button>
       <button data-ops="divided by" class="col-3 ops btn btn-circle btn-outline-warning">/</button>
      </div>
     <div class="row">
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="7">7</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="8">8</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="9">9</button>
      <button data-ops="times" class="col-3 ops btn btn-circle btn-outline-warning cal-btn">*</button>
     </div>
     <div class="row">
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="4">4</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="5">5</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="6">6</button>
      <button data-ops="minus" class="col-3 ops btn btn-circle btn-outline-warning">-</button>
     </div>
     <div class="row">
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="1">1</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="2">2</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="3">3</button>
      <button data-ops="plus" class="col-3 ops btn btn-circle btn-outline-warning">+</button>
     </div>
     <div class="row">
      <button data-ops="negate" class="col-3 ops btn btn-circle btn-outline-secondary">+/-</button>
      <button class="col-3 num btn btn-circle btn-outline-info" data-num="0">0</button>
      <button class="col-3 num btn btn-circle btn-outline-secondary" data-num=".">.</button>
      <button id="equals" class="col-3 equals btn btn-circle btn-outline-success" data-result="">=</button>
     </div>
    </div>
    </div>
   </div>
  </div>

<script>
/*
TODO:
  Limit number input
  Disallow . from being entered multiple times
  Clean up structure
*/

(function() {
"use strict";

// Shortcut to get elements
var el = (element)=> {
  if (element.charAt(0) === "#") { // If passed an ID...
    return document.querySelector(element); // ... returns single element
  }

  return document.querySelectorAll(element); // Otherwise, returns a nodelist
};

// Variables
var viewer = el("#viewer"), // Calculator screen where result is displayed
  equals = el("#equals"), // Equal button
  nums = el(".num"), // List of numbers
  ops = el(".ops"), // List of operators
  theNum = "", // Current number
  oldNum = "", // First number
  resultNum, // Result
  operator; // Batman

// When: Number is clicked. Get the current number selected
var setNum = function() {
  if (resultNum) { // If a result was displayed, reset number
    theNum = this.getAttribute("data-num");
    resultNum = "";
  } else { // Otherwise, add digit to previous number (this is a string!)
    theNum += this.getAttribute("data-num");
  }

  viewer.innerHTML = theNum; // Display current number

};

// When: Operator is clicked. Pass number to oldNum and save operator
var moveNum = function() {
  oldNum = theNum;
  theNum = "";
  operator = this.getAttribute("data-ops");

  equals.setAttribute("data-result", ""); // Reset result in attr
};

// When: Equals is clicked. Calculate result
var displayNum = function() {

  // Convert string input to numbers
  oldNum = parseFloat(oldNum);
  theNum = parseFloat(theNum);

  // Perform operation
  switch (operator) {
    case "plus":
      resultNum = oldNum + theNum;
      break;

    case "minus":
      resultNum = oldNum - theNum;
      break;

    case "times":
      resultNum = oldNum * theNum;
      break;

    case "divided by":
      resultNum = oldNum / theNum;
      break;

      // If equal is pressed without an operator, keep number and continue
    default:
      resultNum = theNum;
  }

  // If NaN or Infinity returned
  if (!isFinite(resultNum)) {
    if (isNaN(resultNum)) { // If result is not a number; set off by, eg, double-clicking operators
      resultNum = "You broke it!";
    } else { // If result is infinity, set off by dividing by zero
      resultNum = "Look at what you've done";
      el('#calculator').classList.add("broken"); // Break calculator
      el('#reset').classList.add("show"); // And show reset button
    }
  }

  // Display result, finally!
  viewer.innerHTML = resultNum;
  equals.setAttribute("data-result", resultNum);

  // Now reset oldNum & keep result
  oldNum = 0;
  theNum = resultNum;

};

// When: Clear button is pressed. Clear everything
var clearAll = function() {
  oldNum = "";
  theNum = "";
  viewer.innerHTML = "0";
  equals.setAttribute("data-result", resultNum);
};

/* The click events */

// Add click event to numbers
for (var i = 0, l = nums.length; i < l; i++) {
  nums[i].onclick = setNum;
}

// Add click event to operators
for (var i = 0, l = ops.length; i < l; i++) {
  ops[i].onclick = moveNum;
}

// Add click event to equal sign
equals.onclick = displayNum;

// Add click event to clear button
el("#clear").onclick = clearAll;

// Add click event to reset button
el("#reset").onclick = function() {
  window.location = window.location;
};

}());
</script>
