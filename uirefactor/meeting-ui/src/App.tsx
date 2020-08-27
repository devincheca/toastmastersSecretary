import React from 'react';
import './App.css';
import DatePickerDiv from './components/DatePickerDiv/DatePickerDiv';
import NavBar from './components/NavBar/NavBar';
import 'bulma/css/bulma.css'

function App() {
  return (
    <div>
      <NavBar></NavBar>
      <DatePickerDiv></DatePickerDiv>
    </div>
  );
}

export default App;
