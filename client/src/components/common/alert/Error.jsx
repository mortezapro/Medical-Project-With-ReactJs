const Error = ({ message }) => {
  return (
    <div className="min-w-[500px] absolute top-5 left-1/2 -translate-x-1/2 block">
      <p className="bg-rose-600 text-white py-2 px-4 rounded-md text-sm flex justify-center items-center">
        {message}
      </p>
    </div>
  );
};

export default Error;
