import React from "react";
import { Route, Switch, Redirect, Link, withRouter } from "react-router-dom";
import SignInForm from "./SignInForm";
import SignUpForm from "./SignUpForm";

const Home = () => {
  return (
    <Switch>
      <Redirect exact from="/" to="/SignInForm"></Redirect>
      <Route path="/SignInForm" component={SignInForm} />
      <Route path="/SignUpForm" component={SignUpForm} />
    </Switch>
  );
};

export default Home;
