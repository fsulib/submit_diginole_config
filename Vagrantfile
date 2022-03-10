Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/focal64"
  config.vm.provision :shell, 
  path: "boot.sh",
  env: {
    "AWS_ACCESS_KEY_ID" => ENV['AWS_ACCESS_KEY_ID'],
    "AWS_SECRET_ACCESS_KEY" => ENV['AWS_SECRET_ACCESS_KEY'],
    "AWS_DEFAULT_REGION" => ENV['AWS_DEFAULT_REGION'],
    "GITHUB_TOKEN" => ENV['GITHUB_TOKEN']
  },
  keep_color: true
  config.vm.network :forwarded_port, host: 9999, guest: 80
  config.vbguest.auto_update = false
  config.ssh.forward_agent = true
  config.vm.define 'submit_diginole_vagrant' do |t|
    config.vm.provider :virtualbox do |v|
      v.customize ["modifyvm", :id, "--memory", 4096]
    end
  end
end
