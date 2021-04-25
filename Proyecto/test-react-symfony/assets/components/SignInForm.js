import React, { Fragment } from "react";
import { Formik, Form } from "formik";
import { Route, Switch, Redirect, Link, withRouter, Router } from "react-router-dom";
import * as Yup from "yup";
import MyTextInput from "../constants/MyTextInput";
import MyPassword from "../constants/MyPassword";
import SignUpForm from "./SignUpForm";

const SignInForm = () => {
  return (
    <Fragment>
      <h1>Loggin!</h1>
      <Formik
        initialValues={{
          user: "",
          password: "",
        }}
        validationSchema={Yup.object({
          user: Yup.string().required("Introduce tu usuario."),
          password: Yup.string().required("Introduce la contraseña."),
        })}
        onSubmit={(values) => {
          console.log(values);
          window.location =
            "https://www.divinacocina.es/Categorias/recetas-de-la-abuela/";
        }}
      >
        <Form>
          <MyTextInput
            label="Usuario"
            name="user"
            type="text"
            placeholder="Usuario"
          />

          <MyPassword
            label="Contraseña"
            name="password"
            type="password"
            placeholder="password"
          />

          <button type="submit" className="btn btn-primary">
            Inicia la sesión
          </button>
        </Form>
      </Formik>
      <Link to={"/SignUpForm"}>
        <button className="btn btn-success">Registrate</button>
      </Link>
    </Fragment>
  );
};

export default SignInForm;
