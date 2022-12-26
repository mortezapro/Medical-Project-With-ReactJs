<?php
namespace App\Helpers;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class UpdateServiceProvider{
    public Code $code;
    protected Filesystem $files;
    public function __construct(string $pascalName)
    {
        $code = new Code();
        $this->files = App::make(Filesystem::class);
        $content = $this->files->get($this->getStubPath());
        $contents = $this->getStubContents($content,$this->getVariables($pascalName));

        $path = base_path("App\\Providers\\ServiceLayerProvider.php");
        $code->putToMethod($path,"register","}",$contents);

        $slash = DIRECTORY_SEPARATOR;
        $content = "use App".$slash."Services".$slash.$pascalName.$slash.$pascalName."ServiceInterface;";
        $content.= "\n use App".$slash."Services".$slash.$pascalName.$slash.$pascalName."Service;";
        $code->putToFile($path,"use",";",$content);
    }
    public function getStubPath()
    {
        return base_path(). '/stubs/service.provider.stub';
    }
    public function getStubContents($stub , $stubVariables = [])
    {
        foreach ($stubVariables as $search => $replace)
        {
            $stub = str_replace('{{'.$search.'}}' , $replace, $stub);
            $stub = str_replace('{{ '.$search.' }}' , $replace, $stub);
        }

        return $stub;
    }
    public function getVariables($name)
    {
        return [
            'name' => $name,
        ];
    }
}
