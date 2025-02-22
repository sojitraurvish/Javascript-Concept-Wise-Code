// .switchMap // this observable is is used when use need value before second observable get clicked

let clicks= Rx.Observable.fromEvent(document,"click")

clicks.switchMap(click=>{
    return Rx.Observable.interval(500)
})
.subscribe(i=>console.log(i))