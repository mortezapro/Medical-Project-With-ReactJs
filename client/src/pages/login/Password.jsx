export const Password = ({ formStep, setFormStep }) => {
  return (
    <div className={`min-w-full p-2 transition-all duration-500 ${formStep}`}>
      <p className="xl:text-lg">رمز عبور</p>
      <div className="mt-14 flex flex-col text-sm xl:text-base">
        <label htmlFor="password">رمز عبور خود را وارد نمایید</label>
        <input
          type="text"
          name="password"
          id="password"
          className="input mt-2 text-left"
          style={{ direction: "ltr" }}
        />
      </div>
      <div className="mt-14 flex justify-around text-sm xl:text-base">
        <button
          className="bg-gray-400 text-white py-2 px-6 rounded-md outline-none hover:opacity-80"
          onClick={() => setFormStep("translate-x-0")}
        >
          برگشت
        </button>
        <button className="bg-pink-400 text-white py-2 px-6 rounded-md outline-none hover:opacity-80">
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
  );
};
