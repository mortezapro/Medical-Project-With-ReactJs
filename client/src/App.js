import { Home, Login } from "./pages";
import { Category } from "pages/Category/Category";
import { Route, Routes } from "react-router-dom";
const App = () => {
	return (
		<>
			<Routes>
				<Route exact path="/" element={<Home />} />
				<Route path="/login" element={<Login />} />
				<Route path="/category" element={<Category />} />
			</Routes>
		</>
	);
};

export default App;
