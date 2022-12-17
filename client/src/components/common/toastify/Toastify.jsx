import { useEffect } from "react";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

export const Toastify = ({
  message = "",
  type = "info",
  position = "top-right",
  theme = "light",
  rtl = true,
}) => {
  useEffect(() => {
    message && toast[type](message);
  }, [type, message]);

  return (
    <ToastContainer
      position={position}
      autoClose={5000}
      hideProgressBar={false}
      newestOnTop={false}
      closeOnClick
      rtl={rtl}
      pauseOnFocusLoss
      draggable
      pauseOnHover
      theme={theme}
    />
  );
};
