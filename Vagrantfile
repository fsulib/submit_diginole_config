Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/focal64"
  config.vm.provision :shell, 
  path: "build/vagrant.sh",
  keep_color: true
  config.vm.synced_folder ".", "/submit_diginole_config", :mount_options => ["dmode=777","fmode=777"]
  config.vm.synced_folder "~/.ssh", "/local_keys", :mount_options => ["dmode=777","fmode=777"]
  config.vm.network :forwarded_port, host: 9999, guest: 80
  config.vbguest.auto_update = false
  config.vm.define 'submit_diginole_vagrant' do |t|
    config.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--memory", 2048]
    end
  end
end
