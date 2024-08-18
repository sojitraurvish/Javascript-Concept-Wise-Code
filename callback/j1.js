//callback
//1 good part of call back (how to call back help us to write async code)
//2 bad part of call back (it create two problems 1.callback hell 2 inversion of control)

//javascript is synchronous single threaded language so it has one call stack and it can do 1 thing at a time and it is very fist so it will quickly execute js code

//NOTE: time tide and javascript waits for none

//callback is way do asynchronous things in javascript
//mean we take code put in callback and pass it as function and that code will be executed 
//leter point of time that how call back works 

//e.g
//----------------------- uncomment
// console.log("Namaste")
// setTimeout(function(){
// 	console.log("javascript")
// },5000)

// const b=async(fun)=>{
//     // await setTimeout(()=>{},1000)
//     fun("hellow")
// }

// b((greeetings)=>{
//     console.log(greeetings);
// })

// console.log("hey this is end")
//------------------------------


//e.g this is call back hell ()

// const cart=["shoes","pants","kurta"]

// api.createOrder(cart,function(){

// 	api.proceedToPayment(function(){
	
// 		api.showOrderSummary(function(){
// 			api.updateWallet()
// 		})
// 	})
// })

// inversion of control 
// in above code we have given responsibility to call proceed 
// to payment but what if crete order function will not run or 
// run twice


//promise give us control to our code

// with callback
// const cart=["shoes","pants","kurta"]

// api.createOrder(cart,function(){

// })

// with promises 

// const promise=createOrder(cart);

// promise.then((orderid)=>{
//     proceedToPayment(orderid)
// })

const myFun=async()=>{

    // console.log("start");
    // const GITHUB_URI="https://fakestoreapi.com/products"
    
    // const user=await fetch(GITHUB_URI)
    
    // console.log("promise",user);
    // console.log("just log");
    
    // const SINGLE_URI="https://fakestoreapi.com/products/2"
    // const newdata=await fetch(SINGLE_URI)
    // console.log("new",newdata);
    // console.log("hellow");
    
    
    return new Promise(async(resole,reject)=>{
        console.log("promise start");
       const SINGLE_URI="https://fakestoreapi.com/products/1"
       const user=await fetch(SINGLE_URI)
       console.log("data",user);
       const data=await user.json()
       console.log("json",data);
       if(user){
        console.log("when data got");
        resole(user)
        console.log("all the end");

       }else{
        reject("data not found")
       }
       console.log("mine end");
   })
    
    console.log("end------");
}

console.log("first");
const myFun2=async ()=>{
    
    const hello=await myFun()
    console.log("get data",hello);
}

myFun2()
console.log("second");