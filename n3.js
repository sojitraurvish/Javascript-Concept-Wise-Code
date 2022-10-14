const person={
    name:"urvish",
    age:29,
    // greet:()=>{
    //     console.log("Hi, I am "+this.name);//here in arrow function (this) represent globle object (window.)
    // }
    greet:function(){
        console.log("Hi, I am "+this.name);
    },
    // greets(){
    //     console.log("Hi, I am "+this.name);
    // }
}

const copiedPerson={...person};//to make new copy

person.greet();
// person.greets();