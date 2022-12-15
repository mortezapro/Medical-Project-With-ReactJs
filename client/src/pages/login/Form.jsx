import { useState } from "react";
import { Username, Password } from "./";
import Error from "components/common/alert/Error";

import logo from "../../assets/images/logo/logo-sm.png";

export const Form = () => {
  const [formStep, setFormStep] = useState("");
  const [username, setUsername] = useState("");
  const [showError, setShowError] = useState({ status: false, message: "" });

  return (
    <>
      {showError.status && <Error message={showError.message} />}
      <div className="w-full py-5 px-4 text-gray-500 relative md:w-1/2 md:py-6 md:px-5 lg:py-10 xl:px-10">
        <div className="flex flex-nowrap overflow-hidden">
          {/* username */}
          <Username
            formStep={formStep}
            setFormStep={setFormStep}
            username={username}
            setUsername={setUsername}
            setShowError={setShowError}
          />
          {/* password */}
          <Password formStep={formStep} setFormStep={setFormStep} />
        </div>
        {/* logo */}
        <img
          src={logo}
          alt="logo-image"
          className="absolute w-10 bottom-4 left-1/2 -translate-x-1/2 xl:w-12"
        />
      </div>
    </>
  );
};
