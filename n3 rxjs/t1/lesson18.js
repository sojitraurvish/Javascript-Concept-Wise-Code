// combine two observable's value

const yin = Rx.Observable.of("peanut butter", "wine", "rainbows")
const yong = Rx.Observable.of("jelly","cheese","unicorns")

const combo = Rx.Observable.zip(yin,yong)

combo.subscribe(arr => console.log(arr))