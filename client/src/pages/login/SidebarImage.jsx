import baby from "../../assets/images/auth/baby.jpg";

export const SidebarImage = () => {
  return (
    <div className="hidden md:block md:w-1/2">
      <img src={baby} alt="baby-smile-image" className="w-full" />
    </div>
  );
};
