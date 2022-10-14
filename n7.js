
// const fetchData=(callback)=>{

//     setTimeout(()=>{
//         callback("Done!");
//     },1500);
// }

// setTimeout(()=>{
//     console.log("Timer is done!");
//     fetchData((text)=>{
//         console.log(text);
//     });
// },2000);//this is acync code that will be executed after sync code 

// console.log('hellow');//scnc code
// console.log("my good name is urvish sojitra");

//****************************************************************************************** */
// const fetchData=()=>{
//     const promise=new Promise((resolve,reject)=>{//there are multiple internal or external package give you this created promise object you need to just use .then and .catch block 
//         var output=false;
//         if(output)
//         {
//             resolve("Done!");
//         }
//         else{
//             reject("Done!");
//         } 
//     });
//     return promise;
// }

// setTimeout(()=>{
//     console.log("Timer is done!");
//     fetchData()
//     .then(
//         function resolve(value){
//             console.log("resolve:"+value);
//             return fetchData();
//         },
//         function reject(error){
//             console.log("reject:"+error);
//             return fetchData();
//     })
//     .then(
//         function resolve(value){
//             console.log("resolve:"+value);
//             return fetchData();
//         },
//         function reject(error){
//             console.log("reject:"+error);
//             return fetchData();
//         }
//     )
//     .catch((error)=>{
//         console.log(error);
//     });
// },2000);//this is acync code that will be executed after sync code 
//****************************************************************************************** */
const fetchData=()=>{
    const promise=new Promise((resolve,reject)=>{//there are multiple internal or external package give you this created promise object you need to just use .then and .catch block 
        var output=false;
        if(output)
        {
            resolve("Done!");
        }
        else{
            reject("Done!");
        } 
    });
    return promise;
}

setTimeout(()=>{
    console.log("Timer is done!");
    fetchData()
    .then(
        function resolve(value){
            console.log("resolve:"+value);
            return fetchData();
        },
        function reject(error){//this both reject promise and this both same to catch reject call
            console.log("reject:"+error);
            return fetchData();
    })
    .catch((error)=>{//this both reject promise and this both same to catch reject call
        console.log(error);
    });
},2000);//this is acync code that will be executed after sync code 

console.log('hellow');//scnc code
console.log("my good name is urvish sojitra");