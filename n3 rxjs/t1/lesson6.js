// hot vs cold observable

// 2@. but you can make observable hot by simply building that value outside of the observable

const x=Math.random()

const cold = Rx.Observable.create(observer=>{
    observer.next(x)
})

// but here i will create two different subscriber and might think they both should get the same value
cold.subscribe(val => console.log(val)) // now we here get same number
cold.subscribe(val => console.log(val))