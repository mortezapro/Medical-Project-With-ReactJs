import Home from "./pages/home/Home";
import { Login } from "./pages";
import { Route, Routes } from "react-router-dom";
const App = () => {
  return (
    <>
      <Routes>
        <Route exact path="/" element={<Home />} />
        <Route path="/login" element={<Login />} />
      </Routes>
    </>
  );
};

export default App;
