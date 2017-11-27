import React from "react";
import Input from "./input.jsx";
class TwoColumns extends React.Component
{
  render() 
  {
    return (
      <div>
      <div className="w3-center w3-row">
      <div className="w3-col s6">{this.props.session}</div>
      <div className="w3-col s6">Time</div>
    </div>
    <div class="w3-center w3-row">
      <div className="w3-col s6">
        <Input name={this.props.session + "1"} type="text" value="" placeholder={this.props.session + "1"} onUserInput={this.handleUserInput} />
      </div>
      <div className="w3-col s6">
        <Input name={this.props.session + "1Time"} placeholder={this.props.session + "1Time"} type="text" value="" />
      </div>
    </div>
    <div className="w3-center w3-row">
      <div className="w3-col s6">
        <Input name={this.props.session + "2"} placeholder={this.props.session + "2"} type="text" value="" />
      </div>
      <div className="w3-col s6">
        <Input name={this.props.session + "2Time"} placeholder={this.props.session + "2Time"} type="text" value="" />
      </div>
    </div>
    <div className="w3-center w3-row">
      <div className="w3-col s6">
        <Input name={this.props.session + "3"} placeholder={this.props.session + "3"} type="text" value="" />
      </div>
      <div className="w3-col s6">
        <Input name={this.props.session + "3Time"} placeholder={this.props.session + "3Time"} type="text" value="" />
      </div>
    </div>
    <div className="w3-center w3-row">
      <div className="w3-col s6">
        <Input name={this.props.session + "4"} placeholder={this.props.session + "4"} type="text" value="" />
      </div>
      <div className="w3-col s6">
        <Input name={this.props.session + "4Time"} placeholder={this.props.session + "4Time"} type="text" value="" />
      </div>
    </div>
    <div className="w3-center w3-row">
      <div className="w3-col s6">
        <Input name={this.props.session + "5"} placeholder={this.props.session + "5"} type="text" value="" />
      </div>
      <div className="w3-col s6">
        <Input name={this.props.session + "5Time"} placeholder={this.props.session + "5Time"} type="text" value="" />
      </div>
    </div>
    </div>
    );
  }
}
module.exports = TwoColumns;