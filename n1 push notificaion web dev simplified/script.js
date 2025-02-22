const button = document.querySelector("button")


button.addEventListener("click",()=>{
    Notification.requestPermission().then(perm=>{
        if(perm==="granted"){
            const notification = new Notification("Example Notification",{
                body:"This is more text" + Math.random(),// this all data goes inside target object when i print the notification object bellow 
                data:{hello:"world"},
                icon:"Frame 1171282841.png",
                // silent:true to make notification silent
                tag:"welcome message" // this like unique id that you can give to notification
                // and if i send the notification with the same id the i will override old one does not create new once
            })  
            
            //    console.log(notification.data) 
            // close -> when someone close the notification
            // click -> when someone click the notification
            // error -> when someone denied the notification from browser's notification popup
            // show -> when someone error show notification
            // notification.addEventListener("click",e=>{
            //     console.log(e); // here you will get that target object inside this object
                
            // })
            notification.addEventListener("click",e=>{
                console.log(e); // here you will get that target object inside this object
                
            })

        }
    })
})


// let notification;
// let inter
// document.addEventListener("visibilitychange",()=>{//this event gets trigger whenever you lost focus on your page or you hide the page
//     if(document.visibilityState==="hidden"){// that mean we are no longer on the page that mean we want to send notification asking the user to come back 
//         notification = new Notification("Please come back",{
//             body:"PLEASSSS",
//             tag:"COME BACK"
//         })// but after when we come back to that page it is not getting hide automatically for that we create above variable
//     }else{
//         notification.close()
//     }
// })

// now we want to use know for how low it is far away form the page 
let notification;
let interval
document.addEventListener("visibilitychange",()=>{//this event gets trigger whenever you lost focus on your page or you hide the page
    if(document.visibilityState==="hidden"){// that mean we are no longer on the page that mean we want to send notification asking the user to come back 
        const leavedTimeStamp=new Date();
        interval = setInterval(()=>{
            notification = new Notification("Please come back",{
                body:`You have gone for ${Math.round((new Date() - leavedTimeStamp)  / 1000) } seconds`,
                tag:"COME BACK"
            })// but after when we come back to that page it is not getting hide automatically for that we create above variable
        },100)
    }else{
        if(interval) clearInterval(interval)
        if(notification) notification.close()
    }
})