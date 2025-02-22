// we can also create timer by

//const timer = Rx.Observable.timer(1000)//pass amount of mili seconds we winded up for 1000 - 1 second
const timer = Rx.Observable.interval(1000)//pass amount of mili seconds we winded up for 1000 - 1 second

// to start the timer we just call subscribe on it

timer.subscribe(done=>console.log(done+"ding!"+new Date().getSeconds()))