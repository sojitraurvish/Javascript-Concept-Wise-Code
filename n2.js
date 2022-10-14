var name="urvish";
let phone=7864554543;
const age=10;

//anonimus function

(function(lname,lphone,lage)
{
    console.log(`my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`);
})(name,phone,age);

var x=function(lname,lphone,lage)
{
    console.log(`my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`);
}

x(name,phone,age);

// arrow function

function myDetails(lname,lphone,lage)//normal function
{
    return `my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`;
}

console.log(myDetails(name,phone,age));


const myDetails1=function(lname,lphone,lage)//anonymus function
{
    return `my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`;
}

console.log(myDetails1(name,phone,age));

const myDetails2=(lname,lphone,lage)=>{ //arrow function 
    return `my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`;
}

console.log(myDetails2(name,phone,age));


//arrow function
const myDetails3=(lname,lphone,lage)=> `my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`;

console.log(myDetails3(name,phone,age));
// const myDetails3=> `my name is ${lname}. Phone number is ${lphone}. And age is ${lage}`;

// console.log(myDetails3(name,phone,age));

// callbacks

//callbacks with normal function 

function myDisplay(some)
{
    console.log(some);
}

function myCalculator(n1,n2)
{
    let sum=n1+n2;
    myDisplay(sum);
}

myCalculator(5,5);

//now hire is the callback function
function myDisplayer(some)
{
    console.log(some);
}

function myNewCalculator(n1,n2,myDisplayerDef)
{
    let sum=n1+n2;
    myDisplayerDef(sum);
}

myNewCalculator(5,5,myDisplayer/*hire we pass the function defination so we need to execute only one function*/);
