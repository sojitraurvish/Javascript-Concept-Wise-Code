// .filter 

// const numbers = Rx.Observable.of(10,100,1000)

// numbers 
//     .filter(num => num > 10)
//     .subscribe(x=> console.log(x))

// .first 

// const numbers = Rx.Observable.of(10,100,1000)

// numbers 
//     .first()
//     .subscribe(x=> console.log(x))


// .last 

const numbers = Rx.Observable.of(10,100,1000)

numbers 
    .last()
    .subscribe(x=> console.log(x))