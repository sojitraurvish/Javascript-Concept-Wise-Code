//Observable - an array that build overtime, then you can loop over this array dimension of time by subscribing them

// creating observable from scratch
const observable=Rx.Observable.create((observer)=>{// create takes an observer function where we can defined what observable send to the subscriber
    observer.next("helllo")// to send value you call observer.next and that value can be anything string, object whatever you want
    observer.next("world")
    observer.next([5,4,5])
})

// then to make the observable start emitting value you call subscribe on it in this call we will take each value and just print it to the screen

observable.subscribe(val => console.log(val))