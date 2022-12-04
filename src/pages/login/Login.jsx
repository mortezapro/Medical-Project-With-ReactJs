import { useState } from "react";

// images
import logo from "../../assets/images/logo/logo-sm.png";
import baby from "../../assets/images/auth/baby.jpg";

export const Login = () => {
  const [formStep, setFormStep] = useState("");

  return (
    <div className="w-full h-screen overflow-hidden bg-gradient-to-t from-indigo-400 via-purple-400 to-pink-400 flex justify-center items-center">
      <div className="bg-white w-11/12 h-3/4 rounded-xl shadow-md overflow-hidden flex lg:w-3/4">
        {/* form */}
        <div className="w-full py-5 px-4 text-gray-500 relative md:w-1/2 md:py-6 md:px-5 lg:py-10 xl:px-10">
          <div className="flex flex-nowrap overflow-hidden">
            {/* username */}
            <div
              className={`min-w-full p-2 transition-all duration-500 ${formStep}`}
            >
              <p className="xl:text-lg">نام کاربری</p>
              <div className="mt-14 flex flex-col text-sm xl:text-base">
                <label htmlFor="username">نام کاربری خود را وارد نمایید</label>
                <input
                  type="text"
                  name="username"
                  id="username"
                  className="mt-2 bg-slate-100 border border-slate-100 py-2 px-4 text-left outline-none focus:bg-white focus:border-pink-300 focus:ring-4 focus:ring-pink-200/50 active:border-gray-200 active:ring-0 transition-all"
                />
              </div>
              <div className="mt-14 flex justify-center text-sm xl:text-base">
                <button
                  className="bg-pink-400 text-white py-2 px-6 outline-none hover:opacity-80"
                  onClick={() => setFormStep("translate-x-full")}
                >
                  ادامه
                </button>
              </div>
              {/* helps */}
              <div className="mt-16">
                <div className="text-xs flex flex-col sm:flex-row sm:items-center xl:text-sm">
                  <p>آیا نام کاربری را فراموش کرده اید؟</p>
                  <a href="#" className="text-pink-400 sm:mr-2">
                    فراموشی نام کاربری
                  </a>
                </div>
                <div className="text-xs flex flex-col sm:flex-row sm:items-center xl:text-sm">
                  <p>آیا میخواهید عضو شوید؟</p>
                  <a href="#" className="text-pink-400 sm:mr-2">
                    ثبت نام
                  </a>
                </div>
              </div>
            </div>
            {/* password */}
            <div
              className={`min-w-full p-2 transition-all duration-500 ${formStep}`}
            >
              <p className="xl:text-lg">رمز عبور</p>
              <div className="mt-14 flex flex-col text-sm xl:text-base">
                <label htmlFor="password">رمز عبور خود را وارد نمایید</label>
                <input
                  type="text"
                  name="password"
                  id="password"
                  className="mt-2 bg-slate-100 border border-slate-100 py-2 px-4 text-left outline-none focus:bg-white focus:border-pink-300 focus:ring-4 focus:ring-pink-200/50 active:border-gray-200 active:ring-0 transition-all"
                />
              </div>
              <div className="mt-14 flex justify-around text-sm xl:text-base">
                <button
                  className="bg-gray-400 text-white py-2 px-6 outline-none hover:opacity-80"
                  onClick={() => setFormStep("translate-x-0")}
                >
                  برگشت
                </button>
                <button className="bg-pink-400 text-white py-2 px-6 outline-none hover:opacity-80">
                  ورود
                </button>
              </div>
              {/* helps */}
              <div className="mt-16">
                <div className="text-xs flex flex-col sm:flex-row sm:items-center xl:text-sm">
                  <p>آیا رمز عبور را فراموش کرده اید؟</p>
                  <a href="#" className="text-pink-400 sm:mr-2">
                    فراموشی رمز عبور
                  </a>
                </div>
              </div>
            </div>
          </div>
          {/* logo */}
          <img
            src={logo}
            alt="logo-image"
            className="absolute w-10 bottom-4 left-1/2 -translate-x-1/2 xl:w-12"
          />
        </div>
        {/* image */}
        <div className="hidden md:block md:w-1/2">
          <img src={baby} alt="baby-smile-image" className="w-full" />
        </div>
      </div>
    </div>
  );
};
