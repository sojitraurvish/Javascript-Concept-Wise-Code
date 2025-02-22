// hot vs cold observable

// now we here get same number and that make our observable hot but we can do it without decoupling that data from observable as we did in leson7.js

const cold = Rx.Observable.create(observer=>{
    observer.next(Math.random())
})

const hot=cold.publish()// then we create hot observable by calling publish on the cold observable  
// this tell that only emit the data once we call the corresponding connect method on it

hot.subscribe(val => console.log(val)) 
hot.subscribe(val => console.log(val))

hot.connect()// then call the connect on hot observable and that will trigger subscription to emit the data