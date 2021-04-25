import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router } from "react-router-dom";
import "./styles/app.css";
import SignInForm from "./components/SignInForm";
import Home from "./components/Home";

ReactDOM.render(
  <Router>
    <div className="container mt-5">
      <Home />
    </div>
  </Router>,
  document.getElementById("root")
);
