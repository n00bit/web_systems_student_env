# -*- mode: ruby -*-

Vagrant::Config.run do |config|

  config.vm.box = "web_tech_env"
  #config.vm.box_url = ".box"

  # config.vm.boot_mode = :gui
  
  config.vm.customize ["modifyvm", :id, "--memory", "512"]


  # host, bridge
  network = "host"
  if ENV["OS"].to_s.include? "Windows" then
    nfsd = false
  else
    nfsd = true
  end
  nfsd = false
  if network == "host" 
    config.vm.network :hostonly, "33.33.33.33"
    config.vm.forward_port 80, 8000
    config.vm.forward_port 8080, 8080
    config.vm.forward_port 3306, 3306
    config.vm.forward_port 5432, 5432
    config.vm.share_folder "v-data", "/vagrant", ".", :nfs => nfsd
    config.vm.share_folder "www", "/srv/dev_dev/current/public", "./public/www", :nfs => nfsd
  end

  if network == "bridge" 
    config.vm.network :bridged
    config.vm.forward_port 80, 80
    config.vm.share_folder "v-data", "/vagrant", ".", :nfs => false
  end
end
