
import { initializeApp } from "firebase/app";
import { getMessaging } from "firebase/messaging";

const firebaseConfig = {
    apiKey: "AIzaSyCPevZySTvu6mUchZwnXrEPv8lDD0598JI",
    authDomain: "test-push-notification-52d7e.firebaseapp.com",
    projectId: "test-push-notification-52d7e",
    storageBucket: "test-push-notification-52d7e.firebasestorage.app",
    messagingSenderId: "965285579897",
    appId: "1:965285579897:web:064bfe35ce7e11d75e98a8",
    measurementId: "G-DMQMV9Q3JF"
  };
  
export const app=initializeApp(firebaseConfig)

export const messaging = getMessaging(app);