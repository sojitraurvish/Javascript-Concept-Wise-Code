// .scan it same like reduce function of vanila js

let clicks= Rx.Observable.fromEvent(document,"click")

clicks
    .map(e=> parseInt(Math.random() * 10))
    .do(score => console.log(`Click scored + ${score}`))
    .scan((highScore,score)=> highScore + score)
    .subscribe(highScore=> console.log(`High score ${highScore}`))

