// .takeUntil  allows us to complete the observable based on the value of the other observable

// so here we compete first observable based on value of second observable 

const interval = Rx.Observable.interval(500)
const notifier = Rx.Observable.timer(2000)

interval    
    .takeUntil(notifier)// this will unsubscribe first observable so we do not have to do manually
    .finally(()=>console.log("completed!"))
    .subscribe(i=>console.log(i))