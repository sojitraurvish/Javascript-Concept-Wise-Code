const person={
    name:"urvish",
    age:29,
    // greet:()=>{
    //     console.log("Hi, I am "+this.name);//here in arrow function (this) represent globle object (window.)
    // }
    greet:()=>{
        console.log("Hi, I am "+this.name);
    },
    // greets(){
    //     console.log("Hi, I am "+this.name);
    // }
}

const printName=({name,greet/*object destracturing */})=>{
    console.log(name,greet());
}

printName(person);

const {name,age}=person;
console.log(name,age);


const hobbies=["urvish","jay"];
const [h1,h2]=hobbies;
console.log(h1);