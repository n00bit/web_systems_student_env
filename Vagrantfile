#   Install with command

vagrant plugin 'vagrant-hostsupdater'

Vagrant.configure("2") do |config|
  config.vm.define "webserver" do |machine|
    machine.hostsupdater.aliases = ["phpmyadmin.dev", "webdb.dev", "phppgadmin.dev"]

    machine.vm.network :private_network, ip: "10.0.0.10"

    machine.vm.synced_folder ".", "/vagrant", :disabled => false, :nfs => true, :windows__nfs_options => ["-exec"]
    machine.vm.synced_folder "./www", "/var/www", :disabled => false, :nfs => true, :windows__nfs_options => ["-exec"]

    machine.vm.provider :virtualbox do |vb, override|
      vb.customize ["modifyvm", :id, "--memory", "256"]
      vb.customize ["modifyvm", :id, "--cpus", "1"]
      override.vm.box = "webdb"
    end
  end
end
