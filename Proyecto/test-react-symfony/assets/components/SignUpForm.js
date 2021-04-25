import React, { Fragment } from "react";
import { Formik, Form } from "formik";
import * as Yup from "yup";
import MyTextInput from "../constants/MyTextInput";
import MyPassword from "../constants/MyPassword";

const SignUpForm = () => {
  const botonRegistrate = () => {
    window.location = "https://github.com/FrankPalomino/proyectoFinal";
  };

  return (
    <Fragment>
      <h1>Registation!</h1>
      <Formik
        initialValues={{
          user: "",
          password: "",
        }}
        validationSchema={Yup.object({
          user: Yup.string().required("Introduce tu usuario."),
          correo: Yup.string().required("Introduce tu correo."),
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

          <MyTextInput
            label="Correo"
            name="correo"
            type="text"
            placeholder="Correo"
          />

          <MyPassword
            label="Contraseña"
            name="password"
            type="password"
            placeholder="password"
          />

          <MyPassword
            label="Repite Contraseña"
            name="password2"
            type="password"
            placeholder="repite password"
          />

          <button type="submit" className="btn btn-primary">
            Registrarse
          </button>
        </Form>
      </Formik>
    </Fragment>
  );
};

export default SignUpForm;