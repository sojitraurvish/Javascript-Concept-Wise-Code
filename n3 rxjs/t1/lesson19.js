// if we have bunch of api call and we want all of them to resole before sending any data to the ui

const yin = Rx.Observable.of("peanut butter", "wine", "rainbows")
const yong = Rx.Observable.of("jelly","cheese","unicorns").delay(200)

const combo = Rx.Observable.forkJoin(yin,yong)

combo.subscribe(arr => console.log(arr))