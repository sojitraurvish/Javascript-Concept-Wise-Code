// now we look bunch of rx js operators

// first is map

// const numbers = Rx.Observable.of(10,100,1000)

// numbers 
//     .map(num => Math.log(num))
//     .subscribe(x=> console.log(x))

// the same above thing when api send the json object

const jsonString='{"type":"Dog","bread":"pug"}'
const apiCall=Rx.Observable.of(jsonString)

apiCall
    .map(json => JSON.parse(json))
    .subscribe(obj=>{
        console.log(obj.type);
        console.log(obj.bread);
    })