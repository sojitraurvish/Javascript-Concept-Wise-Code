import logo from './logo.svg';
import './App.css';
import {useEffect, useState} from "react"
import { messaging } from './firebase';
import { getToken, onMessage } from 'firebase/messaging';

function App() {

  const [fcmToken,setFcmToken]=useState(null);

  async function requestPermission(){
    try {
      
      const permission = await Notification.requestPermission()
      
      if(permission==="granted"){
        // Generate Token
        const token = await getToken(messaging,{vapidKey:'BITfXVXFJ1xvMZxPxAbzzf8n-1oFXbiVEZUgUth466LFBaMCZXVGXZiLyQi-9vTy_sbdUMdsqqrYaSeDbVWkGF8'})
        setFcmToken(token)
        console.log("token",token); 
        
  
      }else if(permission==="denied"){
        throw new Error("Notification not Granted")
        // alert("You denied for the notification");
      }
    } catch (error) {
      
      alert("You denied for the notification",error);
      
    }
  }
 

  useEffect(()=>{
    // Req user for notification permission
    requestPermission()

    onMessage(messaging,(payload)=>{
      console.log("foreground",payload);
      
    })
  },[])

  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a>
      </header>
    </div>
  );
}

export default App;
