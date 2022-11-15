import psycopg2
import sshtunnel

sshtunnel.SSH_TIMEOUT = 5.0
sshtunnel.TUNNEL_TIMEOUT = 5.0

with sshtunnel.SSHTunnelForwarder(
    ('ssh.pythonanywhere.com'),
    ssh_username='iHealth', ssh_password='I2226rish',
    remote_bind_address=('iHealth-2829.postgres.pythonanywhere-services.com', 12829)
) as tunnel:
    connection = psycopg2.connect(
        user='postgres', password='123',
        host='127.0.0.1', port=tunnel.local_bind_port,
        database='iHealth_database',
    )
    # Do stuff
