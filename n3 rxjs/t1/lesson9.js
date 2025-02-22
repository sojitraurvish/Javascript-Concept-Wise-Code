// however there are other observables that wan't complete automatically amd in some cases it leads to memory leaks if it is very data intensive stream
// so this way we complete it

 const interval=Rx.Observable.interval(500)
                    .finally(()=>console.log("all done"))


const subscription=interval.subscribe(x=>console.log(x))

setTimeout(()=>{
    subscription.unsubscribe()
},3000)