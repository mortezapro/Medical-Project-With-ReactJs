import Home from "./pages/home/Home";
import {Route, Routes} from "react-router-dom";
const App = () => {
    return (
        <>
            <Routes>
                <Route exact path="/" element={<Home/>} />
            </Routes>
        </>
    );
};

export default App;
