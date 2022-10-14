// const hobbies=["urvish","jay",1,1.2,true,{name:"uri"}];
const hobbies=["urvish","jay"];

// for(let hobby of hobbies)
// {
//     console.log(hobby);
// }

console.log(hobbies.map(hobby=>{
    return "Hobby: " + hobby;
}));