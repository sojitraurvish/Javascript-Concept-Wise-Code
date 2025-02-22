// hot vs cold observable

//cold - observable is just observable where the data is created inside of it this mean it will not create the _data until something subscribe to it

const cold = Rx.Observable.create(observer=>{
    observer.next(Math.random())
})

// but here i will create two different subscriber and might think they both should get the same value
cold.subscribe(val => console.log(val))
cold.subscribe(val => console.log(val))

// but here you will get different number and that how you will know that you are working with cold observable

