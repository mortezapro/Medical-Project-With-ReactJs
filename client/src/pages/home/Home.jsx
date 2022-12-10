import SearchZone from "components/SearchZone/SearchZone";
import Header from "components/common/header/Header";
import Footer from "components/common/footer/Footer";
import HighlightSection from "./HighlightSection";
import IntroductionSection from "./IntroductionSection";
import ExpertSection from "./ExpertSection";
import "./Home.css"
export const Home = () => {
    return(
        <>
            <Header/>
                <main className="dark:bg-dark-secondary pt-5">
                    <SearchZone/>
                    <IntroductionSection/>
                    <HighlightSection/>
                    <ExpertSection/>
                </main>
            <Footer/>
        </>
    )
}