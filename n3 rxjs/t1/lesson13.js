// now we look it .debounce() and .throttle()

let mouseEvents = Rx.Observable.fromEvent(document,"mousemove")

mouseEvents
    // .debounceTime(1000)
    .throttleTime(1000)
    .subscribe(e=>console.log(e.type))
