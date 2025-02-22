// we use observable with promise and the library uses it

const promise = new Promise((resolve,reject)=>{
    setTimeout(()=>{
        resolve("resolved")
    },1000)
})

// to convert this promise to observable 
const observable= Rx.Observable.fromPromise(promise)// this is extremely important when there is library that is built upon promises

observable.subscribe(result=> console.log(result))

// you can also convert observable back to the promise by calling toPromise on it