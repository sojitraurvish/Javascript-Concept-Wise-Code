// .catch - now we look at .catch for handling errors

const observable= Rx.Observable.create(observer=>{
    observer.next("good")
    observer.next("great")
    observer.next("grand")

    throw 'catch me!'

    observer.next("wonderful")
})

observable
    .catch(err=>console.log(`Error caught: ${err}`))
    .retry(2)// here it retry but still not get reaches 'wonderful' and this do the same thing twice 
    .subscribe(val => console(val))