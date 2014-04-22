#   Install with command

Vagrant.require_plugin 'vagrant-hostsupdater'

Vagrant.configure("2") do |config|
  config.vm.define "webserver" do |machine|
    machine.hostsupdater.aliases = ["hw2.n00bit.no-ip.org", "hw3.n00bit.no-ip.org"]

    machine.vm.network :private_network, ip: "10.0.0.22"

    machine.vm.synced_folder ".", "/vagrant", :disabled => false, :nfs => true, :windows__nfs_options => ["-exec"]
    machine.vm.synced_folder "./www/hw2", "/var/www/hw2", :disabled => false, :nfs => true, :windows__nfs_options => ["-exec"]
    machine.vm.synced_folder "./www/hw3", "/var/www/hw3", :disabled => false, :nfs => true, :windows__nfs_options => ["-exec"]

    machine.vm.provider :virtualbox do |vb, override|
      vb.customize ["modifyvm", :id, "--memory", "1024"]
      vb.customize ["modifyvm", :id, "--cpus", "1"]
      override.vm.box = "roman_nabiyllin"
    end
  end
end
