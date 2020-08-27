import React from "react";
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
 
class DatePickerDiv extends React.Component {
  state = {
    chosenDate: new Date()
  };
 
  handleChange = (date:any) => {
    this.setState({
      chosenDate: date
    });
  };
 
  render() {
    return (
      <DatePicker
        selected={this.state.chosenDate}
        onChange={this.handleChange}
      />
    );
  }
}
export default DatePickerDiv;