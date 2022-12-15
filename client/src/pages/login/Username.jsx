export const Username = ({
  formStep,
  setFormStep,
  username,
  setUsername,
  setShowError,
}) => {
  const nextSlide = () => {
    username
      ? setFormStep("translate-x-full")
      : setShowError({
          status: true,
          message: "لطفا نام کاربری را وارد نمایید",
        });
  };

  const handleChange = (e) => {
    setUsername(e.target.value);
    setShowError({ status: false, message: "" });
  };

  return (
    <div className={`min-w-full p-2 transition-all duration-500 ${formStep}`}>
      <p className="xl:text-lg">نام کاربری</p>
      <div className="mt-14 flex flex-col text-sm xl:text-base">
        <label htmlFor="username">نام کاربری خود را وارد نمایید</label>
        <input
          type="text"
          name="username"
          id="username"
          value={username}
          onChange={handleChange}
          className="input mt-2 text-left"
          style={{ direction: "ltr" }}
        />
      </div>
      <div className="mt-14 flex justify-center text-sm xl:text-base">
        <button
          className="bg-pink-400 text-white py-2 px-6 rounded-md outline-none hover:opacity-80"
          onClick={nextSlide}
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
  );
};
