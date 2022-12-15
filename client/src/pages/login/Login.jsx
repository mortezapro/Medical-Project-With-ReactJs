import { Form, SidebarImage } from "./";

export const Login = () => {
  return (
    <div className="w-full h-screen overflow-hidden bg-gradient-to-t from-indigo-400 via-purple-400 to-pink-400 flex justify-center items-center">
      <div className="bg-white w-11/12 h-3/4 rounded-xl shadow-md overflow-hidden flex lg:w-3/4">
        <Form />
        <SidebarImage />
      </div>
    </div>
  );
};
