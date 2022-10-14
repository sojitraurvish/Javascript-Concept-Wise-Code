const hobbies=["sports","cooking"];


// const copiedArray=hobbies.slice();
// const copiedArray=[hobbies];
const copiedArray=[...hobbies];//spared oprater

console.log(copiedArray);

const toArray=(...args)=>{//rest oprator
    return args;
}
