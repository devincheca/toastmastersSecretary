import React from 'react';
class Input extends React.Component
{
  constructor(props)
  {
    super(props);
    this.handleUserInput = this.handleUserInput.bind(this);
  }
  handleUserInput() {
    this.props.onUserInput(
      this.formInput.value, 
      this.props.placeholder
    );
  }
  render ()
  {
    return (
      <div>
        {this.props.prefix ? this.props.prefix + " " : ""}
        <input
          name=""
          type="text"
          placeholder={this.props.placeholder}
          value={this.props.value}
          ref={(input) => this.formInput = input}
          onChange={this.handleUserInput}
          className={this.props.className}
        />
        {this.props.suffix ? " " + this.props.suffix : ""}
      </div>
    );
  }
}
module.exports = Input;