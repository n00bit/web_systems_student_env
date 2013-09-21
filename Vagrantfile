Vagrant.configure("2") do |config|

  config.vm.box = "omgtu_ws"
  ;config.vm.box_url = "http://files.vagrantup.com/precise32.box"

  config.vm.provider "virtualbox" do |v|
    v.customize ["modifyvm", :id, "--memory", "1024"]
  end

   config.vm.network "private_network", ip: "33.33.33.33"
   config.vm.network "forwarded_port", guest: 80, host: 80
   config.vm.synced_folder ".", "/vagrant" #, nfs: false
   config.vm.synced_folder "./public/www", "/srv/dev_dev/current/public" #, nfs: false
end

